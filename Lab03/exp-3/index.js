function addBlog(e) {
    const date = new Date();
    date.setTime((date.getTime() + (7 * 60 * 60 * 1000)));
    const createdAt = formatDate(date);
    date.setTime(date.getTime() + (17 * 60 * 60 * 1000));
    const expiresAt = date.toUTCString();
    let blogName = document.getElementById("blog-name");
    let blogContent = document.getElementById("blog-content");
    const blogNameValue = blogName.value;
    const blogContentValue = blogContent.value;
    document.cookie = `Blog: ${blogNameValue}=${`content=${blogContentValue}|createdAt=${createdAt}`}; expires=${expiresAt}; path=/`;
    blogName.value="";
    blogContent.value = "";
    location.reload();
}

function readMore(event) {
    const blog = event.target.parentElement;
    const blogExpand = event.target;
    const blogContent = blog.children[2];
    if (blogContent.className === "blog-content-short") {
        blogContent.setAttribute("class", "blog-content-full");
        blogExpand.innerHTML = "show less";
    } else {
        blogContent.setAttribute("class", "blog-content-short");
        blogExpand.innerHTML = "read more";
    }
}

function formatDate(date) {
    let data = date.toUTCString().split(" ");
    return `${data[2]} ${data[1]} ${data[3]} ${data[4]}`;
}

function showBlogList() {
    const PREFIX_INDEX = 6;
    let blogListContainer = document.getElementById("blog-list-container");
    let blogs = document.cookie.split("; ").filter(item => item.substring(0,4) === "Blog").map(data => {
        let blogName = data.substring(PREFIX_INDEX, data.search("="));
        let blogDetails = data.substring(data.search("=") + 1 + PREFIX_INDEX).split("|");
        let blogContent = blogDetails[0].substring(blogDetails[0].search("=") + 1);
        let blogCreateDate = blogDetails[1].substring(blogDetails[1].search("=") + 1);
        return {
            name: blogName,
            content: blogContent,
            createdAt: blogCreateDate
        }
    });
    blogs.forEach(item => {
        let blogContainer = document.createElement("div");
        let blogName = document.createElement("p");
        let blogContent = document.createElement("p");
        let blogCreateDate = document.createElement("p");
        let blogExpand = document.createElement("p");
        blogName.innerHTML = item.name;
        blogName.setAttribute("class", "blog-name");
        blogContent.innerHTML = item.content;
        blogContent.setAttribute("class", "blog-content-short");
        blogCreateDate.innerHTML = `created at ${item.createdAt}`;
        blogCreateDate.setAttribute("class", "blog-createdAt");
        if (item.content.length > 281) {
            blogExpand.innerHTML = "read more";
            blogExpand.setAttribute("class", "blog-expand");
            blogExpand.setAttribute("onclick", "readMore(event)");
        }
        blogContainer.appendChild(blogName);
        blogContainer.appendChild(blogCreateDate);
        blogContainer.appendChild(blogContent);
        blogContainer.appendChild(blogExpand);
        blogContainer.setAttribute("class", "blog-container");
        blogListContainer.appendChild(blogContainer);
    });
}