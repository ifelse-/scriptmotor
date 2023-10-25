
from flask import Flask, request, jsonify

app = Flask(__name__)

# Sample data
data = [
    {"id": 1, "name": "John"},
    {"id": 2, "name": "Alice"},
]

# Route to get all data
@app.route('/api/data', methods=['GET'])
def get_data():
    return jsonify(data)

# Route to get data by ID
@app.route('/api/data/<int:id>', methods=['GET'])
def get_data_by_id(id):
    result = next((item for item in data if item['id'] == id), None)
    if result:
        return jsonify(result)
    return "Data not found", 404

# Route to add new data
@app.route('/api/data', methods=['POST'])
def add_data():
    new_data = request.get_json()
    data.append(new_data)
    return "Data added successfully", 201

if __name__ == '__main__':
    app.run(debug=True)