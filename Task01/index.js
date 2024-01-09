// below code is for add to cart button
const addtocartbtns = document.getElementsByClassName('addtocartbtn');
const cartcounter =document.getElementById('cartcounter');

let counter = 0;


for(let i=0; i<addtocartbtns.length; i++){
    addtocartbtns[i].addEventListener('click', ()=>{
        counter++;
        cartcounter.textContent= counter;
    })
}

//below code is for filtering results

const filterButtons = document.querySelectorAll('.filter-button');
const products = document.querySelectorAll('.product');

products.forEach(product => {
    product.classList.add('show');
  });

filterButtons.forEach(button => {
  button.addEventListener('click', () => {
    const filter = button.getAttribute('data-filter');

    products.forEach(product => {
      const category = product.getAttribute('data-category');
      if (filter === 'all' || filter === category) {
        product.classList.add('show');
      } else {
        product.classList.remove('show');
      }
    });
  });
});

//below code is for details button

 // Select all "Details" buttons
 const detailsButtons = document.querySelectorAll('.detailsBtn');

 // Add click event listener to each "Details" button
 detailsButtons.forEach(button => {
   button.addEventListener('click', (event) => {
     // Retrieve the product details from the clicked card
     const card = event.target.closest('.card');
     const productName = card.querySelector('.card-title').textContent;
     const productDescription = card.querySelector('.card-text').textContent;

     // Create an element to display the product details
     const productDetailsElement = document.createElement('div');
     productDetailsElement.innerHTML = `
       <h2>${productName}</h2>
       <p>${productDescription}</p>
       <a href="#" class="btn btn-primary">Buy Now</a>
       <br><br><br>
       <h4>Fill The Form For Further Process</h4>
       <br><br>
       <button class="btn btn-primary">Login</button>
     `;

     // Replace the card content with the product details
     card.innerHTML = '';
     card.appendChild(productDetailsElement);
   });
 });