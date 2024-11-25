import { Component, OnInit } from '@angular/core';
import { UserService } from '../../services/user.service';

@Component({
  selector: 'app-users',
  templateUrl: './users.component.html',
  styleUrls: ['./users.component.css'],
})
export class UsersComponent implements OnInit {
  users: any[] = []; // Store users here
  errorMessage: string = '';

  constructor(private userService: UserService) {}

  ngOnInit(): void {
    // Fetch users when the component loads
    this.userService.getUsers().subscribe({
      next: (data) => {
        this.users = data; // Assign fetched users to the array
      },
      error: (error) => {
        this.errorMessage = 'Could not load user data!';
        console.error('Error fetching users:', error);
      },
    });
  }
}
