<pre class="code_ex">
  <code id="example1" class="javascript">
Form Validation & localStorage check
form.addEventListener('submit', (e) => {
let messages = []

if (email.value === '' || email.value == null) {
  messages.push('Please enter an email address')
} else if (!isEmail(email.value)) {
  messages.push('Invalid email address')
}

if (messages.length > 0) {
  e.preventDefault()
  error.innerText = messages.join(', ')
  return;
  } else if (isEmail(email.value)) {
}

if (localStorage.getItem(email.value) !== null) {
  e.preventDefault();
  addImgToRow();
}

else {
  e.preventDefault();
  addEmailRow();
  localStorage.setItem(email.value, email.value);
}
})

// Function tests variable against regex format
function isEmail(i) {
return /^([a-z\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]
{2,8})?$/.test(i);
}}
  </code>
</pre>