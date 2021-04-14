resource "google_compute_network" "default" {
  name        = "default"
  description = "Default network for the project"
}

resource "google_compute_firewall" "server" {
  name    = "default"
  network = google_compute_network.default.name

  allow {
    protocol = "icmp"
  }

  allow {
    protocol = "tcp"
    ports    = ["22"]
  }

  allow {
    protocol = "tcp"
    ports    = ["80"]
  }

  allow {
    protocol = "tcp"
    ports    = ["443"]
  }

  allow {
    protocol = "tcp"
    ports    = ["8080"]
  }

}

resource "google_compute_global_address" "private_ip_range" {
  network       = google_compute_network.default.id
  name          = "google-managed-services-sql-instance"
  purpose       = "VPC_PEERING"
  address_type  = "INTERNAL"
  address       = "10.0.1.0"
  prefix_length = 24

  depends_on = [google_compute_network.default]
}

resource "google_service_networking_connection" "private_vpc_connection" {
  network                 = google_compute_network.default.name
  service                 = "servicenetworking.googleapis.com"
  reserved_peering_ranges = [google_compute_global_address.private_ip_range.name]
}
