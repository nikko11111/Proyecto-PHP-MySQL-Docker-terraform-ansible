terraform {
  required_providers {
    docker = {
      source  = "kreuzwerker/docker"
      version = "~> 4.0"
    }
  }
}

provider "docker" {}

resource "docker_network" "app_network" {
  name   = "mi-proyecto-network"
  driver = "bridge"
}
