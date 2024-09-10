import hitungHarga from "../functions/hitung-harga.js"

const form = document.getElementById("form-paket-wisata")
if (form instanceof HTMLFormElement) {
    form.addEventListener("input", () => hitungHarga(form))
}

if (location.search.includes("status=success")) {
    Swal.fire({
        title: "Data berhasil disimpan",
        icon: "success"
    })
}

if (location.search.includes("status=failed")) {
    Swal.fire({
        title: "Data gagal disimpan",
        icon: "warning"
    })
}
