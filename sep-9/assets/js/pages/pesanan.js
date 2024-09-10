const hapusPesananBtn = document.querySelectorAll(
    `[data-name="btn-hapus-pesanan"]`
)

hapusPesananBtn.forEach((btn) => {
    const id = btn.dataset.id

    btn.addEventListener("click", () => {
        console.log("asd")

        Swal.fire({
            title: "Anda yakin ingin menghapus?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya!"
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = `http://localhost:8000/views/hapus-pesanan.php?id=${id}`
            }
        })
    })
})
// hapusPesananBtn.addEventListener("click", () => {
//     console.log("asd")
// })
