* {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
}

/* style peta */
#peta {
    height: 100vh;
    width: 100%;
    position: absolute;
    z-index: 0;
}

/* style widget */
#alert {
    position: absolute;
    padding: 13px 17px 17px 17px;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.86);
    box-shadow: 10px 10px rgba(28, 28, 28, 0.2);
    top: 10px;
    left: 10px;
}

#alert button {
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    padding: 5px 10px;
    border-radius: 5px;
    color: rgba(255, 255, 255, 0.9);
    background-color: rgb(0, 0, 0);
    box-shadow: 5px 4px rgba(26, 217, 217, 0.65);
}

#alert button:hover {
    color: rgba(255, 255, 255, 0.8);
    background-color: rgb(64, 64, 64);
    box-shadow: none;
    transform: translateY(2px);
    transition: 50ms;
}

#box-komentar {
    position: absolute;
    padding: 15px;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.86);
    box-shadow: 10px 10px rgba(28, 28, 28, 0.2);
    bottom: 10px;
    right: 10px;
}

#box-komentar button {
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    padding: 5px 10px;
    border-radius: 5px;
    color: rgba(255, 255, 255, 0.9);
    background-color: rgb(0, 0, 0);
    box-shadow: 5px 4px rgba(26, 217, 217, 0.65);
}

#box-komentar button:hover {
    color: rgba(255, 255, 255, 0.8);
    background-color: rgb(64, 64, 64);
    box-shadow: none;
    transform: translateY(2px);
    transition: 50ms;
}

.Kategori {
    position: absolute;
    padding: 15px;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.86);
    box-shadow: 10px 10px rgba(28, 28, 28, 0.2);
    top: 10px;
    right: 10px;
}

.kategori-judul {
    font-size: 18px;
    font-weight: bold;
    color: rgba(26, 217, 217, 0.85);
}

.divider {
    margin: 12px 0 18px 0;
    background-color: rgba(0, 0, 0);
    height: 2px;
}

.kategori-input {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.kategori-input label {
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    color: rgba(23, 23, 23, 0.8);
}

.kategori-input label:hover {
    color: rgba(45, 147, 147, 0.6);
}

.kategori-input input[type="radio"] {
    margin-right: 7px;
}

.kategori-input input[type="radio"]:hover {
    margin-right: 10px;
    transition: 50ms;
}

.kategori-input input[type="radio"]:checked+span {
    color: rgba(26, 217, 217, 0.8);
}

/* style hidden box */
#login {
    position: absolute;
    padding: 15px 20px;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.86);
    box-shadow: 10px 10px rgba(28, 28, 28, 0.2);
    top: 10px;
    left: 10px;
}

#login form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

#login input[type="text"],
#login input[type="password"] {
    font-size: 14px;
    padding: 5px;
    border-radius: 5px;
    border: 3px solid rgba(26, 217, 217, 0.65);
}

#login input[type="submit"] {
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    padding: 5px 10px;
    border-radius: 5px;
    color: rgba(255, 255, 255, 0.9);
    background-color: rgb(0, 0, 0);
    box-shadow: 5px 4px rgba(26, 217, 217, 0.65);
}

#login input[type="submit"]:hover {
    color: rgba(255, 255, 255, 0.8);
    background-color: rgb(64, 64, 64);
    box-shadow: none;
    transform: translateY(2px);
    transition: 50ms;
}

#komentar {
    position: absolute;
    padding: 15px 20px;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.86);
    box-shadow: 10px 10px rgba(28, 28, 28, 0.2);
    bottom: 10px;
    right: 10px;
}

#komentar form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

#komentar #commenttext {
    width: 300px;
    height: 150px;
    font-size: 14px;
    padding: 5px;
    border-radius: 5px;
    border: 3px solid rgba(26, 217, 217, 0.65);
}

#komentar input[type="submit"] {
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    padding: 5px 10px;
    border-radius: 5px;
    color: rgba(255, 255, 255, 0.9);
    background-color: rgb(0, 0, 0);
    box-shadow: 5px 4px rgba(26, 217, 217, 0.65);
}

#komentar input[type="submit"]:hover {
    color: rgba(255, 255, 255, 0.8);
    background-color: rgb(64, 64, 64);
    box-shadow: none;
    transform: translateY(2px);
    transition: 50ms;
}
