function fetchContent() {
  const url = 'aniwave.to/home'; // Replace with your actual URL

  fetch(url)
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.text();
    })
    .then(data => {
      document.getElementById('content').innerHTML = `<pre>${data}</pre>`;
    })
    .catch(error => {
      document.getElementById('content').innerHTML = `Error fetching content: ${error.message}`;
    });
}
