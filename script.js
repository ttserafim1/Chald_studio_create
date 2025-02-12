document.getElementById('applicationForm').addEventListener('submit', async function(event) {
    event.preventDefault();

    const nickname = document.getElementById('nickname').value;
    const name = document.getElementById('name').value;
    const age = document.getElementById('age').value;

    const botToken = '7776157593:AAFaX3wQXT5gdSN2PgyklNe4NcLcArUuG8s';
    const chatId = '6962439559';
    const message = `Новая заявка!%0AНик: ${nickname}%0AИмя: ${name}%0AВозраст: ${age}`;

    const url = `https://api.telegram.org/bot${botToken}/sendMessage?chat_id=${chatId}&text=${message}`;

    try {
        await fetch(url);
        document.getElementById('responseMessage').textContent = 'Заявка отправлена!';
    } catch (error) {
        document.getElementById('responseMessage').textContent = 'Ошибка при отправке заявки.';
    }
});
