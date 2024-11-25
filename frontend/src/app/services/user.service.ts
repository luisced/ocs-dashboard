import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';


@Injectable({
  providedIn: 'root'
})
export class UserService {
private apiUrl = 'http://laravel_nginx/users';
  constructor(private http: HttpClient) { }
  getUsers(): Observable<any> {
    return this.http.get<any[]>(this.apiUrl); // Fetch users
  }

}


@Injectable({
  providedIn: 'root',
})
export class UserService {
  private apiUrl = 'http://laravel_nginx/users'; // Use environment variable in production

  constructor(private http: HttpClient) {}

  getUsers(): Observable<any> {
    return this.http.get<any[]>(this.apiUrl); // Fetch users
  }
}
