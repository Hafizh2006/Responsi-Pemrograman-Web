document.getElementById('formdaftar').addEventListener('submit', function(event) {

const email = document.getElementById('akun').value;
const password = document.getElementById('password').value;
const konfirmasiPassword = document.getElementById('konfirmasiPassword').value;
const persetujuan = document.getElementById('persetujuan').checked;

let error = '';

const emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
      if (!emailPattern.test(email)) {
        error = "Format email tidak valid.";
      } else if (password.length < 8) {
        error = "Password minimal harus 8 karakter.";
      } else if (password !== konfirmasiPassword) {
        error = "Konfirmasi password tidak sama.";
      } else if (!persetujuan) {
        error = "Anda harus menyetujui syarat dan ketentuan.";
      }

      if (error) {
        event.preventDefault(); // mencegah form dikirim
        errorMessage.textContent = error;
      } else {
        errorMessage.textContent = ''; // bersihkan error jika valid
        alert("Registrasi berhasil!");
      }
    });
