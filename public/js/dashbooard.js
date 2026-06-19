async function loadLots() {

    const response =
    await fetch('/api/v1/batches');

    const lots =
    await response.json();

    console.log(lots);
}

loadLots();