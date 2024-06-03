* {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
}

/* CSS PETA */
#map {
    width: 100%;
    height: 100vh;
    position: absolute;
    z-index: 0;
}

/* CSS PopUp peringatan */
#warning {
    position: fixed;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.35);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

#popup {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 20px 25px;
    text-align: justify;
    max-width: 700px;
    border-radius: 15px;
}

#popup h3 {
    color: red;
    font-size: 24px;
    margin-bottom: 30px;
    text-align: center;
}

#popup p {
    font-size: 14px;
    margin-bottom: 20px;
}

#popup button {
    border: none;
    padding: 8px 18px;
    border-radius: 5px;
    color: white;
    background-color: rgb(38, 131, 244);
    cursor: pointer;
    display: block;
    margin: 0 auto;
}

#popup button:hover {
    background-color: rgb(57, 101, 224);
}
