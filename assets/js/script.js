$.ajax({
  url: "./assets/php/getProducts.php",
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
  let root = document.querySelector(".products")
  root.innerHTML = ""

  data.forEach(item => {
    let markup = `
    <div class="card">
      <img class="card-img-top product__img" src="${item.img}" alt="alt text">
      <div class="card-body">
        <h5 class="card-title">${item.name}</h5>
        <p class="card-text">${item.price}$</p>
        <a href="#" class="btn btn-primary">Add to Cart</a>
      </div>
    </div>
    `
    root.innerHTML += markup
  })
}

//* Event Listeners
document.querySelector("#search").addEventListener("input", renderProduct)
document.querySelector("#sort").addEventListener("change", renderProduct)
document
  .querySelectorAll("input[name='type']")
  .forEach(e => e.addEventListener("change", renderProduct))
