function loadContent(page) {
    fetch(page)
        .then(response => response.text())
        .then(data => {
            document.getElementById('main-content').innerHTML = data;
        })
        .catch(error => console.error('Error fetching content:', error));
}
    fetch('/page/home/index.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('main-content').innerHTML = data;
        })
