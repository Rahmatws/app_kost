// Modal konfirmasi hapus
function showConfirmModal(msg) {
    return confirm(msg || 'Yakin ingin menghapus data ini?');
}
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('a[data-confirm]').forEach(function(el) {
        el.addEventListener('click', function(e) {
            e.preventDefault();
            if (showConfirmModal(el.getAttribute('data-confirm'))) {
                window.location = el.getAttribute('href');
            }
        });
    });
    // Autofocus input pertama di form
    var firstInput = document.querySelector('form input, form select');
    if (firstInput) firstInput.focus();
    // Scroll to top button
    let btn = document.createElement('button');
    btn.textContent = '↑';
    btn.id = 'scrollTopBtn';
    btn.style = 'position:fixed;bottom:24px;right:24px;display:none;z-index:99;padding:10px 16px;font-size:18px;border-radius:50%;background:#2a3b4c;color:#fff;border:none;cursor:pointer;';
    document.body.appendChild(btn);
    btn.onclick = () => window.scrollTo({top:0,behavior:'smooth'});
    window.onscroll = () => { btn.style.display = (window.scrollY > 200) ? 'block' : 'none'; };
}); 