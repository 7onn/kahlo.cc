data "google_compute_image" "server" {
  family  = "kahlo-server"
  project = "kahlo-310600"
}

resource "google_compute_instance" "server" {
  name         = "server"
  machine_type = "e2-small"
  zone         = "us-central1-b"

  boot_disk {
    initialize_params {
      image = data.google_compute_image.server.id
    }
    auto_delete = true
  }

  network_interface {
    network = data.terraform_remote_state.network.outputs.vpc_id
    access_config {
    }
  }

  tags = ["http-server", "https-server"]
}
