const validation = new JustValidate ("#submit");

validation
.addField("#names", [
    {
    rule: "required"
    }
]);


// const forma = document.getElementById('forma');
// const names = document.getElementById('name');
// const email = document.getElementById('email');
// const phone = document.getElementById('phone');
// const address = document.getElementById('address');
// const location = document.getElementById('location');
// const guests = document.getElementById('guests');
// const arrivals = document.getElementById('arrivals');
// const leaving = document.getElementById('leaving');

// forma.addEventListener('submit', e => {
//     e.preventDefault();

//     validateInputs();
// });

// const setError = (element, message) => {
//     // .booking .book-form .flex .input-control
//     const inputBox = element.parentElement;
//     const errorDispaly = inputBox.querySelector('.error');

//     errorDispaly.innerText = message;
//     inputBox.classList.add('error');
//     inputBox.classList.remove('success');

// }

// const setSuccess = element => {
//     const inputBox = element.parentElement;
//     const errorDispaly = inputBox.querySelector('.error');

//     errorDispaly.innerText = '';
//     inputBox.classList.add('success');
//     inputBox.classList.remove('error');
// }

// const isValidEmail = email => {
//     const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(String(email).toLowerCase());
// }


// const validateInputs = () => {
//     const namesValue = names.value.trim();
//     const emailValue = email.value.trim();
//     const phoneValue = phone.value.trim();
//     const addressValue = address.value.trim();
//     const locationValue = location.value.trim();
//     const guestsValue = guests.value.trim();
//     const arrivalsValues = arrivals.value.trim();
//     const leavingValue = leaving.value.trim();

//     if(namesValue === ''){
//         setError(names, 'Name is required');
//     }else{
//         setSuccess(names);
//     }
    
//     if(emailValue === ''){
//         setError(email, 'Email is required');
//     }else if(!isValidEmail(emailValue)){
//         setError(email, 'Provide a valid email address');
//     }else{
//         setSuccess(email);
//     }

//     if(phoneValue === ''){
//         setError(phone, 'Your number phone');
//     }else if(phoneValue.length < 9){
//         setError(phone, 'Your number phone is not correct');
//     }else{
//         setSuccess(phone);
//     }

//     if(addressValue === ''){
//         setError(address, 'Please your address');
//     }else if(addressValue.length < 2){
//         setError(address, 'Address must have 2 character');
//     }else{
//         setSuccess(address);
//     }

//     if(locationValue === ''){
//         setError(location, 'Where do you want to go');
//     }else if(locationValue.length > 30){
//         setError(location, 'Your specifet is hard');
//     }else{
//         setSuccess(location);
//     }

//     if(guestsValue === ''){
//         setError(guests, 'How much');
//     }else if(guestsValue <= 0){
//         setError(guests, 'Your not book with negativ');
//     }else{
//         setSuccess(guests);
//     }

//     if(arrivalsValues === ''){
//         setError(arrivals, 'Where you go')
//     }else if(arrivalsValues.length > 32){
//         setError(arrivals, 'Your specifet is hard');
//     }else{
//         setSuccess(arrivals);
//     }

//     if(leavingValue === ''){
//         setError(leaving, 'Please your specified');
//     }else if(leavingValue.length > 32){
//         setError(leaving, 'Your specifet is hard');
//     }else{
//         setSuccess(leaving);
//     }
// }

// const booking = document.querySelector('booking'),
// names = document.querySelector('.name'),
// email = document.querySelector('.email'),
// phone = document.querySelector('.phone'),
// address = document.querySelector('.address'),
// where = document.querySelector('.location'),
// howmany = document.querySelector('.guests'),
// arrivals = document.querySelector('.arrivals'),
// leaving = document.querySelector('.leaving');

// const inputs = document.querySelectorAll("input");

// booking.addEventListener("submit", (send) => {
//     e.preventDefault();
//     checkError();
// });

// function checkError(){
//     if(names.value === ""){
//         errorHAndling("Please write you name", names)
//     }
//     else if(email.value === ""){
//         errorHAndling("Please write you name", email)
//     }
//     else if(phone.value === ""){
//         errorHAndling("Please write you name", phone)
//     }
//     else if(address.value === ""){
//         errorHAndling("Please write you name", address)
//     }
//     else if(where.value === ""){
//         errorHAndling("Please write you name", location)
//     }
//     else if(howmany.value === ""){
//         errorHAndling("Please write you name", guests)
//     }
//     else if(arrivals.value === ""){
//         errorHAndling("Please write you name", arrivals)
//     }
//     else if(leaving.value === ""){
//         errorHAndling("Please write you name", leaving)
//     }
// }

// function errorHAndling(text, input){
//     const parentElement = input.parentElement;
//     const message = parentElement.querySelector(".error");
//     message.innerText = text;
//     message.classList.add("active");
// }
