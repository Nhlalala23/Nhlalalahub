document.addEventListener('DOMContentLoaded',function(){
    const form=document.getElementById('Form');
    form.addEventListener('submit',function(event){
        event.preventDefault();

        const name = document.getElementById('name').value ;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        console.log('Name:${name},Emal:${email}Message: ${message}');

        alert('Form submitted successfully');
    }) ;
});