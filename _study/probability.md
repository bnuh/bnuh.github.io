---
layout: study_guide
title: 'Probability and Random Processes'
caption: Memorial University ENG5420
description: > 
date: '14-04-2022'
---

* this unordered seed list will be replaced by the toc
{:toc}

## Descriptive Statistics

### Statistics

**Statistics** are the summarization of a set of data that has been collected, which demonstrates random variation. *Extracting meaning from data*.

### Inferential Statistics

**Inferential Statistics** make inferences about a situation based on data, such as forecasting. Descriptive statistics can be the basis for inferences.

### Representative Values

* Mean - *The sum of all numbers in a list divided by the number of items in the list*
* Median - *The middle value in a list ordered from smallest to largest*
* Mode - *The most frequently occuring value in a list*
* Range - *[Min, Max]*
* Variance - *Average of deviation from the mean squared*
* Standard Deviation - *Measure of average absolute deviation*
* Skewness - *Measure of the shape of the distribution **function***
* Quantiles - *Generalization of the median to percentiles*
  
### Observational vs. Experimental Data

Experimental Data involves manipulating objects to determine cause and effect in data. Observational Data refers to data extrapolated from naturally occurring events.

## Basic Probability

### Probability Calculus

Probability events have a total probability between zero and one.

\begin{equation}
    Pr[\textrm{An Event}] = 1
\end{equation}

An event that is sure to happen
{:.figcaption}

The definition of probability for how often an event is observed can be related to the number of repetions of the experiment.

\begin{equation}
    Pr[\textrm{Heads}] = \frac{\textrm{Number } k \textrm{ of Heads in }N \textrm{ coin tosses}}{N \textrm{ coin tosses}}
\end{equation}

Counting the probability of heads in a set of coin tosses
{:.figcaption}

The larger the number of repetiions, the higher accuracy with which we can predict the likelihood of an event happening.

### Probability Model

#### Events

Events are elements in the set of possible outcomes in an experiment.

#### Sample Space

The set of all possible outcomes for an experiment.

\begin{equation}
    S = \{1,2,3,4,5,6\}
\end{equation}

The sample space for a dice roll
{:.figcaption}

\begin{equation}
    A_1 = \{1\}, A_2 = \{1,2,5\}
\end{equation}

Subsets containing events in the sample space
{:.figcaption}

The complement of a subset $$A^C$$ is the subset of all other events in the sample space which are not contained in $$A$$.

### Event Algebra

#### Or

The combination of two or more sets.

For $$A = \{1,2,5\}$$ and $$B = \{3, 4\}$$, $$A_1 + A_2 = \{1, 2, 3, 4, 5\}$$

#### And

The set of events which occur in two or more sets.

For $$A = \{1,2,3, 5\}$$ and $$B = \{3, 4\}$$, $$A_1A_2 = \{3\}$$

#### Axioms

* Mutual exclusion: $$AA^c = 0$$
* Inclusion: $$AS = A$$
* Double complement: $$(A^C)^C = A$$
* Commutation: $$A_1 + A_2 = A_2 + A_1$$
* Associativity: $$A_1 + (A_2 + A_3) = (A_1 + A_2) + A_3$$
* Distributivity: $$A_1 (A_2 + A_3) = A_1A_2 + A_1A_3$$
* DeMorgan’s Law: $$(A_1A_2)^c = (A_1)^C + (A_2)^C$$
  
### Probability of Events

#### Non-Mutually Exclusive

#### Complement of an Event

#### Statistical Independence

### Repeated Independant Trials

#### Sampling with Replacement

#### Sampling without Replacement

#### Order of Outcomes

#### The Rules of Product

#### Permutations of Unordered Outcomes

#### Combinations of Non-Unique Outcomes

### Conditional Probability

#### Bayes Theorem

#### Total Probability

## Random Variables

### Discrete Probabilty Distributions

#### Probability Mass Function

#### Bernouli Random Variable

#### Binomial Random Variable

#### Geometric Random Variable

#### Poisson Random Variable

#### Uniform Random Variable

### Continous RVs and Their Distributions

### Common Continuous RVs

#### Exponential Random Value

#### Gaussian RV

#### Gaussian O Values

### Expectation

#### Moments

#### Central Moments

### Entropy

## Multiple Random Variables

### Discrete Random Variables

#### The Joint PMF

#### Independant Random Variables

### Continuous Random Variables

#### Joint Distributions

#### Marginal PDFs

#### Correlation

#### Correlation Coefficient

#### Invariance of Expectation

### Sum of Multiple RVs

#### PDF for $$X_1 + X_2$$

#### Notes on Sums of Independent RVs

#### Sums of Dependent RVs

### Bivariate Gaussian

{:toc}
