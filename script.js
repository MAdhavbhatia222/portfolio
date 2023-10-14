// app.js

document.addEventListener('DOMContentLoaded', function () {
    const iframe = document.getElementById('bing-ai-frame');

    iframe.onload = function () {
        try {
            const innerDoc = iframe.contentDocument || iframe.contentWindow.document;
            const inputField = innerDoc.querySelector('textarea[id="searchbox"]');
            const form = innerDoc.getElementById('searchboxform');

            if (inputField && form) {
                inputField.value = 'Your Query Here'; // Set your prompt here
                form.submit(); // Submit the form
            }
        } catch (error) {
            console.error('An error occurred while trying to interact with the iframe:', error);
        }
    };
});
