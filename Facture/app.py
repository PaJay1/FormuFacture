# app.py
from flask import Flask, request, jsonify

app = Flask(__name__)

@app.route('/calculate_tax', methods=['POST'])
def calculate_tax():
    data = request.json
    product = data['product']
    total_price = data['totalPrice']
    tax_rate = 0.20  # Supposons une taxe de 20%
    total_price_with_tax = total_price * (1 + tax_rate)

    return jsonify({
        'product': product,
        'total_price': total_price,
        'total_price_with_tax': total_price_with_tax
    })

if __name__ == '__main__':
    app.run(port=5000)
