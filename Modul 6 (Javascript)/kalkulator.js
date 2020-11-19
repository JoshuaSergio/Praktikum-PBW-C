const bil1 = document.getElementById('bil1');
const bil2 = document.getElementById('bil2');
const hasil = document.getElementById('hasil');

const tambah = document.getElementById('tambah');
const kurang = document.getElementById('kurang');
const bagi = document.getElementById('bagi');
const kali = document.getElementById('kali');

tambah.addEventListener('click', (e)=>{

    e.preventDefault();
    let val1 = parseFloat(bil1.value);
    let val2 = parseFloat(bil2.value);

    let h = val1 + val2;
    hasil.value = h;
});

kurang.addEventListener('click', (e)=>{

    e.preventDefault();
    let val1 = parseFloat(bil1.value);
    let val2 = parseFloat(bil2.value);

    let h = val1 - val2;
    hasil.value = h;
});

kali.addEventListener('click', (e)=>{

    e.preventDefault();
    let val1 = parseFloat(bil1.value);
    let val2 = parseFloat(bil2.value);

    let h = val1 * val2;
    hasil.value = h;
});

bagi.addEventListener('click', (e)=>{

    e.preventDefault();
    let val1 = parseFloat(bil1.value);
    let val2 = parseFloat(bil2.value);

    let h = val1 / val2;
    hasil.value = h;
});