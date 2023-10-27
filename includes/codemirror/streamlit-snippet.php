
# Import necessary libraries
import streamlit as st
import numpy as np
import matplotlib.pyplot as plt

# Set the title and description of your app
st.title("Simple Streamlit Example")
st.write("This is a basic Streamlit web app.")

# Create a sidebar with user input
st.sidebar.header("User Input")
user_input = st.sidebar.text_input("Enter your name:", "John Doe")

# Display user input
st.write(f"Hello, {user_input}!")

# Create a simple plot
st.write("Here's a basic plot:")
chart_data = np.random.randn(20, 3)
st.line_chart(chart_data)

# Add more content
st.write("You can add more text, data, and visualizations to customize your app.")

// streamlit run streamlit_example.py