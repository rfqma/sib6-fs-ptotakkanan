const gurauanArray = [
    'Ayam apa yang paling besar? Ayam semesta.',
    'Ikan apa yang suka berhenti? -Ikan pause.',
    'Suku apa yang banyak berkeliaran di mal? -Suku-riti.',
    'Hewan apa yang paling hening? Semute.',
    'Hewan apa yang bersaudara? -Katak beradik.',
    'Sapi apa yang larinya cepat? -Sapi-da motor.',
    'Siapa artis yang makin hari malah semakin muda? Mika Tambah young',
    'Berhentilah menuntut ilmu, karena ilmu tidak bersalah. xixixixi',
    'Hewan apa yang nggak pernah salah? Kucing ga wrong.',
    'Benda yang kalau dibalik selalu rusak?? Kasur'
];

function generateRandomGurauan() {
    const randomIndex = Math.floor(Math.random() * gurauanArray.length);
    const randomGurauan = gurauanArray[randomIndex];
    document.getElementById('gurauan-text').innerText = randomGurauan;
}

document.getElementById('generate-gurauan').addEventListener("click", generateRandomGurauan);

