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
  newProject: any = {
    Name: '',
    Description: '',
    Address: '',
    Email: '',
    Phone_Number: '',
    Objective: '',
    Social_Network_URL: ''
  };

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
