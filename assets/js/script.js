const loginURL = "./assets/php/login.php"

async function sendToPHP(url) {
  const response = await fetch(url)
  if (response.ok) return await response.json()
}

document.querySelector(".login").addEventListener("submit", event => {
  event.preventDefault()

  const formElements = event.target.children
  const email = formElements.namedItem("email").value
  const password = formElements.namedItem("password").value

  sendToPHP(`${loginURL}?email=${email}&password=${password}`).then(res => {
    console.log(res)
  })
})
