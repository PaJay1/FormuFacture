// server.js
const express = require('express');
const bodyParser = require('body-parser');
const axios = require('axios');

const app = express();
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

app.post('/calculate', async (req, res) => {
    const { product, price, quantity } = req.body;
    const totalPrice = price * quantity;

    try {
        const response = await axios.post('http://localhost:5000/calculate_tax', {
            product,
            totalPrice
        });

        res.json(response.data);
    } catch (error) {
        res.status(500).send('Erreur lors du calcul des taxes');
    }
});

app.listen(3000, () => {
    console.log('Server running on port 3000');
});
