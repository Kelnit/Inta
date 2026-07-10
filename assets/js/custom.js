function initpass(toggleId, inputId, iconId) {
  // ?
  document.getElementById(toggleId).addEventListener('click', function () {
    const input = document.getElementById(inputId);
    const icon = document.getElementById(iconId);
    if (input.type === 'password') {
      input.type = 'text';
      icon.className = 'bi bi-eye-slash';
    } else {
      input.type = 'password';
      icon.className = 'bi bi-eye';
    }
  });
}

function initvalidate(passwordId, confirmId, errorId) {
  // ?
  const confirm = document.getElementById(confirmId);
  const error = document.getElementById(errorId);

  confirm.addEventListener('input', function () {
    const pass = document.getElementById(passwordId).value;
    if (this.value && this.value !== pass) {
      error.textContent = 'Password tidak sama.';
      error.style.color = 'var(--color-danger-700)';
      error.style.fontSize = '0.82rem';
    } else {
      error.textContent = '';
    }
  });
}

function farewell(e) {
  // ?
  e.preventDefault();
  const url = e.currentTarget.href;
  const modal = new bootstrap.Modal(document.getElementById('logoutModal'));
  modal.show();
  setTimeout(() => { window.location.href = url; }, 4000);
}