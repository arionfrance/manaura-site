const scriptURL = 'https://script.google.com/macros/s/AKfycbyqWngxmXGWiJT3KjABG2FrrNKbZ-qnJAEYPyeKrSwT0KHScg1MeSif_-D2ymeHzMXF/exec'

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
    .then(response => alert("Merci ! Nous avons bien enregistré vos données !" ))
    .then(() => { window.location.reload(); })
    .catch(error => console.error('Error!', error.message))
})