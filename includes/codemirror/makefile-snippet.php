# Define build and start commands
REACT_BUILD = cd frontend && npm run build
NODE_START = cd backend && node server.js
PYTHON_START = cd backend && python app.py

# Targets
all: build start

build:
	@echo "Building React frontend..."
	$(REACT_BUILD)

start: start-node start-python

start-node:
	@echo "Starting Node.js backend..."
	$(NODE_START)

start-python:
	@echo "Starting Python backend..."
	$(PYTHON_START)

clean:
	@echo "Cleaning up..."

.PHONY: all build start start-node start-python clean