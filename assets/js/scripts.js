const validateBtn = document.getElementById('validate-btn');
const processFileBtn = document.getElementById('process-file-btn');
const fileUpload = document.getElementById('file-upload');
const resultContainer = document.getElementById('result');
const historyContainer = document.getElementById('history-container');
const prevPageBtn = document.getElementById('prev-page');
const nextPageBtn = document.getElementById('next-page');

let historyData = [];
let currentPage = 1;
const itemsPerPage = 5;

validateBtn.addEventListener('click', async () => {
    const phone = document.getElementById('single-number').value;

    if (!phone) {
        alert('Please enter a phone number.');
        return;
    }

    const response = await fetch(`validate.php?phone=${phone}`);
    const result = await response.json();

    if (result.error) {
        resultContainer.innerText = `Error: ${result.error}`;
    } else {
        resultContainer.innerHTML = `
            Number: ${result.phone} <br>
            Valid: ${result.valid ? 'Yes' : 'No'} <br>
            Carrier: ${result.carrier || 'Unknown'}
        `;
        addToHistory(result.phone, result.valid, result.carrier);
    }
});

function addToHistory(number, isValid, carrier) {
    historyData.push({ number, valid: isValid, carrier });
    renderHistoryPage(currentPage);
}

function renderHistoryPage(page) {
    historyContainer.innerHTML = '';
    const start = (page - 1) * itemsPerPage;
    const end = page * itemsPerPage;

    const items = historyData.slice(start, end);
    items.forEach(({ number, valid, carrier }) => {
        const entry = document.createElement('div');
        entry.classList.add('entry');
        entry.innerHTML = `
            <span>${number}</span>
            <span class="${valid ? 'valid' : 'invalid'}">${valid ? 'Valid' : 'Invalid'} (${carrier || 'Unknown'})</span>
        `;
        historyContainer.appendChild(entry);
    });

    prevPageBtn.disabled = page === 1;
    nextPageBtn.disabled = end >= historyData.length;
}

prevPageBtn.addEventListener('click', () => {
    if (currentPage > 1) {
        currentPage--;
        renderHistoryPage(currentPage);
    }
});

nextPageBtn.addEventListener('click', () => {
    if (currentPage * itemsPerPage < historyData.length) {
        currentPage++;
        renderHistoryPage(currentPage);
    }
});


<!-- // 💡✌🏾 In the End, He made them Open-Source 💜❤️ // -->
