
import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-api-component',
  templateUrl: './api.component.html',
  styleUrls: ['./api.component.css']
})
export class ApiComponent implements OnInit {
  // Define variables for storing data
  getApiResponse: any;
  postResponse: any;

  constructor(private http: HttpClient) {}

  ngOnInit() {
    // Fetch data when the component is initialized
    this.fetchData();
  }

  fetchData() {
    // GET request to retrieve data from the API
    this.http.get('https://api.example.com/data').subscribe((response) => {
      this.getApiResponse = response;
      console.log('GET API Response:', response);
    }, (error) => {
      console.error('Error fetching data:', error);
    });
  }

  postData() {
    // Data to be posted to the API
    const dataToPost = { key: 'value' };

    // POST request to send data to the API
    this.http.post('https://api.example.com/endpoint', dataToPost).subscribe((response) => {
      this.postResponse = response;
      console.log('POST API Response:', response);
    }, (error) => {
      console.error('Error posting data:', error);
    });
  }
}