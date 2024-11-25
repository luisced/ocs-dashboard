import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { CommonModule } from '@angular/common';
import { ProjectsComponent } from './projects/projects.component';

@NgModule({
  declarations: [
    ProjectsComponent
  ],
  imports: [
    BrowserModule,
    CommonModule
  ],
  providers: [],
  bootstrap: [ProjectsComponent]
})
export class AppModule { }
