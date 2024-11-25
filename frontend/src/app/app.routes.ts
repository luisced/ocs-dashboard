import { Routes } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { AboutComponent } from './about/about.component';
import { ProjectListComponent } from './components/project-list/project-list.component';
import { AdminDashboardComponent } from './components/admin-dashboard/admin-dashboard.component';
import { AdminFormComponent } from './components/admin-form/admin-form.component';

export const routes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'about', component: AboutComponent },
  { path: 'projects', component: ProjectListComponent },
  { path: 'adminDasboard', component: AdminDashboardComponent },
  { path: 'adminProject', component: AdminFormComponent },

];
