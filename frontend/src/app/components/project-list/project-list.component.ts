import { Component, OnInit } from '@angular/core';
import { ProjectService } from '../../services/project.service';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-project-list',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './project-list.component.html',
  styleUrls: ['./project-list.component.css']
})
export class ProjectListComponent implements OnInit {
  projects: any[] = [];
  selectedProject: any = null; // Holds the project for modal display

  constructor(private projectService: ProjectService) {}

  ngOnInit(): void {
    // Fetch projects from the service
    this.projectService.getProjects().subscribe(data => {
      this.projects = data;
    });
  }

  openModal(project: any): void {
    // Set the selected project for the modal
    this.selectedProject = project;
  }
}
