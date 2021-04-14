output "instance_nat_ip" {
  value = google_compute_instance.server.network_interface[0].access_config[0].nat_ip
}

output "how_to_connect_instance" {
  value = "ssh -i ~/.ssh/id_rsa tom@${google_compute_instance.server.network_interface[0].access_config[0].nat_ip}"
}
