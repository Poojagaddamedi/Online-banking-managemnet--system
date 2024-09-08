from flask import Flask, request, jsonify

app = Flask(__name__)

@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json()
    user_message = data.get('message')
    # Implement your chatbot logic here
    response_message = "This is a response from the chatbot"
    return jsonify({'answer': response_message})

if __name__ == '__main__':
    app.run(debug=True)
