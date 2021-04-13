resource "google_dns_managed_zone" "kahlo_cc" {
  name     = "kahlo-cc"
  dns_name = "kahlo.cc."
}

resource "google_dns_record_set" "root" {
  managed_zone = google_dns_managed_zone.kahlo_cc.name

  name    = google_dns_managed_zone.kahlo_cc.dns_name
  type    = "A"
  ttl     = 3600
  rrdatas = [data.terraform_remote_state.production.outputs.instance_nat_ip]
}

resource "google_dns_record_set" "lms" {
  managed_zone = google_dns_managed_zone.kahlo_cc.name

  name    = "edu.${google_dns_managed_zone.kahlo_cc.dns_name}"
  type    = "A"
  ttl     = 3600
  rrdatas = [data.terraform_remote_state.production.outputs.instance_nat_ip]
}
