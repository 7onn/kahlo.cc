terraform {
  backend "gcs" {
    bucket = "kahlo-terraform-state"
    prefix = "network"
  }
}

provider "google" {
  project = "kahlo-310600"
  region  = "us-central1"
  zone    = "us-central1-c"
}
