import { Component, OnInit } from '@angular/core';
import { ProjectService } from '../../services/project.service';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-project-list',
  standalone: true,
  imports: [CommonModule, FormsModule],
  templateUrl: './project-list.component.html',
  styleUrls: ['./project-list.component.css']
})
export class ProjectListComponent implements OnInit {
  projects: any[] = [];
  selectedProject: any = null; // Holds the project for modal display
  newProject: any = {
    Name: '',
    Description: '',
    Address: '',
    Email: '',
    Phone_Number: '',
    Objective: ''
  }; // Holds the new project data

  constructor(private projectService: ProjectService) {}

  ngOnInit(): void {
    // Load projects from localStorage
    const storedProjects = localStorage.getItem('projects');
    if (storedProjects) {
      this.projects = JSON.parse(storedProjects);
    } else {
      // Fetch projects from the service if not in localStorage
      this.projectService.getProjects().subscribe(data => {
        this.projects = data;
        localStorage.setItem('projects', JSON.stringify(this.projects));
      });
    }
  }

  openModal(project: any): void {
    // Set the selected project for the modal
    this.selectedProject = project;
  }

  addProject(): void {
    // Add the new project to the list
    if (this.newProject.Name && this.newProject.Description) {
      this.projects.push({ ...this.newProject });
      localStorage.setItem('projects', JSON.stringify(this.projects)); // Save to localStorage
      this.newProject = {
        Name: '',
        Description: '',
        Address: '',
        Email: '',
        Phone_Number: '',
        Objective: ''
      }; // Reset the form
    }
  }
}
