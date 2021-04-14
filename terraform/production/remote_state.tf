// data "terraform_remote_state" "dns" {
//   backend = "gcs"
//   config = {
//     bucket  = "kahlo-terraform-state"
//     prefix  = "dns"
//   }
// }

data "terraform_remote_state" "network" {
  backend = "gcs"
  config = {
    bucket = "kahlo-terraform-state"
    prefix = "network"
  }
}
