//* Type Checkbox Generator
$.ajax({
  url: "./assets/php/getType.php",
  dataType: "json",
  success: function (data) {
    const uniqueType = []
    data.forEach(element => {
      if (!uniqueType.includes(element.type)) uniqueType.push(element.type)
    })

    const root = document.querySelector("#type")
    root.innerHTML = ""
    uniqueType.forEach(type => {
      let markup = `
      <div>
        <label for="${type}">${type}</label>
        <input type="checkbox" name="type" id="${type}" value="${type}">
      </div>
      `
      root.innerHTML += markup
    })
    document
      .querySelectorAll("input[name='type']")
      .forEach(e => e.addEventListener("change", renderProduct))
  },
})

//* Search and Filter functionality
$.ajax({
  url: "./assets/php/getProduct.php",
  dataType: "json",
  success: function (data) {
    window["productData"] = data
    renderProduct()
  },
})

function renderProduct() {
  let filterData = productData

  filterData = searchFilter(filterData)
  filterData = orderSort(filterData)
  filterData = typeFilter(filterData)
  genProductMarkup(filterData)
}

//* Filter Functions
function searchFilter(data) {
  const searchValue = document.querySelector("#search").value.toUpperCase()
  return data.filter(item => item.name.includes(searchValue))
}
function orderSort(data) {
  const sortIndex = document.querySelector("#sort").selectedIndex
  if (sortIndex === 0) return data.sort((a, b) => (a.price < b.price ? 1 : -1))
  else return data.sort((a, b) => (a.price > b.price ? 1 : -1))
}
function typeFilter(data) {
  const checkedType = []
  document.querySelectorAll("input[name='type']").forEach(element => {
    if (element.checked) checkedType.push(element.value)
  })
  if (checkedType.length === 0) return data
  return data.filter(item => checkedType.includes(item.type))
}
function genProductMarkup(data) {
  const root = document.querySelector(".products")
  root.innerHTML = ""

  data.forEach(item => {
    let markup = `
    <div class="card">
      <img class="card-img-top product__img" src="${item.img}" alt="alt text">
      <div class="card-body">
        <h5 class="card-title">${item.name}</h5>
        <p class="card-text">${item.price}$</p>
        <p id=${item.productID} class="addToCart btn btn-primary">Add to Cart</p>
      </div>
    </div>
    `
    root.innerHTML += markup
  })
  document
    .querySelectorAll(".addToCart")
    .forEach(e => e.addEventListener("click", addToCart))
}

//* Event Listeners
document.querySelector("#search").addEventListener("input", renderProduct)
document.querySelector("#sort").addEventListener("change", renderProduct)

////////////////////////////////////////////////////////////////////////////////

//* Add to Cart
function addToCart() {
  $.ajax({
    url: `./assets/php/addToCart.php?productID=${this.id}`,
    success: function (data) {
      showMsg(data)
    },
  })
}

function showMsg(code) {
  window.scrollTo(0, 0)
  const msg = document.getElementById("msg")
  msg.classList = ""

  if (code == 2) {
    msg.innerHTML = "Admin can't items to cart!"
    msg.classList.toggle("bg-warning")
  } else if (code == 0) {
    msg.innerHTML = "Must be logged in to do that! Please login or register."
    msg.classList.toggle("bg-danger")
  } else if (code == 1) {
    msg.innerHTML = "Item added to cart!"
    msg.classList.toggle("bg-success")
  } else {
    msg.innerHTML = "Unexpected error!"
    msg.classList.toggle("bg-danger")
  }
}
