
#!/bin/bash

echo "Setting up the Node.js backend..."
cd backend-node
npm install

echo "Setting up the Python backend..."
cd ../backend-python
pip install -r requirements.txt

echo "Setting up the React frontend..."
cd ../frontend
npm install