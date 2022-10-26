const sendData = async (url) => {
    let response = await fetch(url);

    if (response.ok) {
        return await response.json();
    }else {
        console.log('Ошибка во время отправки запроса: ' + response.status);
    }
}

export default sendData;
