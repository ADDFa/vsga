const hitungHarga = () => {
    const inputHarga = document.getElementById("harga")
    const inputTotal = document.getElementById("jumlah-tagihan")
    const jmlPeserta = document.getElementById("jumlah-peserta")
    const totalTagihan = document.querySelector(`[name="total_tagihan"]`)
    const hargaPaket = document.querySelector(`[name="harga_paket"]`)
    const penginapan = document.querySelector(`[name="penginapan"]`)
    const transportasi = document.querySelector(`[name="transportasi"]`)
    const servis = document.querySelector(`[name="servis"]`)

    let harga = 0
    if (penginapan.checked) harga += 1000000
    if (transportasi.checked) harga += 1200000
    if (servis.checked) harga += 500000

    // set harga
    inputHarga.value = harga
    hargaPaket.value = harga

    // set total
    if (jmlPeserta.value) {
        const peserta = parseInt(jmlPeserta.value)
        if (isNaN(peserta)) return

        const total = harga * peserta
        inputTotal.value = total
        totalTagihan.value = total
    } else {
        inputTotal.value = harga
        totalTagihan.value = harga
    }
}

export default hitungHarga
