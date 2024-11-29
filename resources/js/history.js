import { getHistory } from './api/api';

document.addEventListener('DOMContentLoaded', async function () {
    const data = await getHistory();

    const historyList = document.getElementById('history-list');

    if (data.length > 0) {
        const emptyState = historyList.querySelector('.empty-state');
        if (emptyState) emptyState.remove();

        populateHistory(data, historyList);
    }
});

function populateHistory(data, container) {
    const template = document.getElementById('history-item-template');

    data.forEach(record => {
        const clone = template.content.cloneNode(true);

        clone.querySelector('.location').textContent = `${record.name}, ${record.country}`;

        const date = new Date(record.created_at);
        const formattedDate = date.toLocaleDateString('pt-BR', { day: '2-digit', month: '2-digit', year: 'numeric', hour: '2-digit', minute: '2-digit' });

        clone.querySelector('.timestamp').textContent = formattedDate;
        clone.querySelector('.weather-info').textContent = `${record.temperature}°C`;

        container.appendChild(clone);
    });
}
