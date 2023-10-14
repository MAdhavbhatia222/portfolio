document.getElementById("prompt-form").addEventListener("submit", function (e) {
    e.preventDefault();
    const prompt = document.getElementById("prompt").value;
    fetch(`https://www.bing.com/search?form=MY0291&OCID=MY0291&q=${encodeURIComponent(prompt)}&showconv=1`)
        .then(response => response.text())
        .then(data => {
            const responseDiv = document.getElementById("response");
            responseDiv.innerHTML = data;
        })
        .catch(error => console.error("Error:", error));
});
