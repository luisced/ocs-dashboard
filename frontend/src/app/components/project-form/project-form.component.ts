import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-project-form',
  standalone: true,
  imports: [CommonModule, FormsModule],
  templateUrl: './project-form.component.html',
  styleUrls: ['./project-form.component.css']
})
export class ProjectFormComponent {
  isLoggedIn = false; // Track login status
  loginError = false; // Track login error
  credentials = { username: '', password: '' }; // For login form

  newProject: any = {
    Name: '',
    Description: '',
    Address: '',
    Email: '',
    Phone_Number: '',
    Objective: '',
    Social_Network_URL: ''
  };

  // Hardcoded login credentials
  private readonly validUsername = 'admin';
  private readonly validPassword = 'admin';

  login(): void {
    if (
      this.credentials.username === this.validUsername &&
      this.credentials.password === this.validPassword
    ) {
      this.isLoggedIn = true;
      this.loginError = false;
    } else {
      this.loginError = true;
    }
    this.credentials = { username: '', password: '' }; // Reset the form
  }

  addProject(): void {
    const storedProjects = localStorage.getItem('projects');
    const projects = storedProjects ? JSON.parse(storedProjects) : [];
    projects.push({ ...this.newProject });
    localStorage.setItem('projects', JSON.stringify(projects));
    this.newProject = {
      Name: '',
      Description: '',
      Address: '',
      Email: '',
      Phone_Number: '',
      Objective: '',
      Social_Network_URL: ''
    }; // Reset the form
  }
}
