# ilc4clarin-single-sign-on

**Configuration files and deployment resources for the service provider `sp.ilc4clarin.ilc.cnr.it` within the ILC4CLARIN infrastructure.**
This repository supports federated authentication using SAML and is part of a broader effort to integrate CLARIN's Single Sign-On (SSO) services with web applications for linguistics and digital humanities research.

---

## 📘 Introduction

This repository accompanies a technical guide for the installation, configuration, and federation of a **Service Provider (SP)** for SAML-based authentication using **SimpleSAMLphp** within the [ILC4CLARIN](https://ilc4clarin.ilc.cnr.it/) infrastructure.

The aim is to support technical staff in integrating the SP with authentication federations such as **DFN-AAI**, **CLARIN**, and **eduGAIN**. The configuration enables secure and seamless user authentication through external Identity Providers (IdPs), based on federation protocols.

---

## 🔐 About SimpleSAMLphp

[SimpleSAMLphp](https://simplesamlphp.org/) is a PHP-based application that supports SAML 2.0 for implementing both Service Providers and Identity Providers. This repository focuses on its SP functionality.

It leverages a metadata-driven approach to establish trust and communication with federated IdPs, enabling web applications to delegate user authentication externally.

---

## 🌍 Federated Authentication

Federated authentication enables users to access services using credentials from their home institutions. The SP delegates authentication to a trusted IdP selected via a **Discovery Service**, such as [CLARIN's discovery portal](https://discovery.clarin.eu/). The identity data received is then used to grant access according to user roles and attributes.

The SAML protocol ensures secure and interoperable exchanges of authentication assertions between SPs and IdPs. The architecture supports integration with both academic federations and generic authentication providers.

---

## 🏗️ Project Context

This implementation is part of the **[H2IOSC](https://www.h2iosc.cnr.it/)** (Humanities and Heritage Italian Open Science Cloud) initiative, funded under the **EU NextGenerationEU** program through Italy's **National Recovery and Resilience Plan (NRRP)**.

CLARIN-IT, the Italian node of [CLARIN ERIC](https://www.clarin.eu/), contributes to this initiative by providing interoperable access to digital language resources, supporting research and innovation in the humanities.

---

## 📁 Repository Structure

```
.
├── build/              # Scripts and templates to build container images
├── idp/                # SimpleSAMLphp configuration as Identity Provider
├── nginx/              # Reverse proxy configuration for frontend routing
├── proxy/              # SimpleSAMLphp as Service Provider + Keycloak integration
├── docker-compose.yml  # Main orchestration file for the authentication stack
└── README.md           # Project documentation
```

---

## 📚 References

- De Castilho, R. E., Klie, J.-C., Kumar, N., Boullosa, B., & Gurevych, I. (2018).  
  *Linking Text and Knowledge Using the INCEpTION Annotation Platform.*  
  In *IEEE 14th International Conference on e-Science* (pp. 327–328).  


- Gavriilidou, M., Piperidis, S., Galanis, D., Pouli, K., Bakagianni, J., Tsiouli, I., … Gkirtzou, K. (2024).  
  *The CLARIN:EL infrastructure: Platform, Portal, K-Centre.*  
  In *Linköping Electronic Conference Proceedings*.  




## 📎 Other References

* [SimpleSAMLphp Docs](https://simplesamlphp.org/docs/stable/)
* [CLARIN Discovery Service](https://discovery.clarin.eu/)
* [DFN-AAI](https://www.aai.dfn.de/)
* [eduGAIN](https://edugain.org/)

