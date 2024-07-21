/* Javascript for signup page
get the details from user using queryselector */
const form= document.querySelector('#form');
const email=document.querySelector('#email');
const password=document.querySelector('#password');
let success=true;

/* When the form is submitted, it calls the validateInputs() function to validate the form inputs. 
If the inputs are not valid, the default form submission is prevented using e.preventDefault(). */
form.addEventListener('submit',(e)=>{
    
    if(!validateInputs()){
        e.preventDefault();

    }
})

function validateInputs(){
    /* this function validate the user inputs and return with success */
    const emailVal=email.value.trim();
    const passwordVal=password.value.trim();

     if(emailVal==='')
    {
        success=false;
        seterror(email,'Email is Required')
    }

    else if(!validateEmail(emailVal)){
        success=false;
        seterror(email,'Please Enter a Valid Email')
    }
    

    else{
        setSuccess(email)
    }
 
    if(passwordVal==='')
    {
        success=false;
        seterror(password,'Password is Required' )
    }

    else if(passwordVal.length<8)
    {
        success=false;
        seterror(password,'Password mustbe atleast 8 charactors')
    }

    else{

        setSuccess(password)
    }

    return success;
    

    
    
    
}

function seterror(element,message){
    /* this fuction works on if there are error in user inputs*/
    const inputGroup= element.parentElement;
    const errorElement=inputGroup.querySelector('.error')

    errorElement.innerText=message;
    inputGroup.classList.add('error')
    inputGroup.classList.remove('success')


}
function setSuccess(element){
    const inputGroup= element.parentElement;
    const errorElement=inputGroup.querySelector('.error')

    errorElement.innerText='';
    inputGroup.classList.add('success')
    inputGroup.classList.remove('error')
    

}

const validateEmail=(email)=>{
        /* check for correct email format*/
    return String(email)
    .toLowerCase()
    .match(
        /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

    );
};



