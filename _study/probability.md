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
* Skewness - *Measure of the shape of the distribution function*
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

1. Mutual exclusion: $$AA^c = 0$$
2. Inclusion: $$AS = A$$
3. Double complement: $$(A^C)^C = A$$
4. Commutation: $$A_1 + A_2 = A_2 + A_1$$
5. Associativity: $$A_1 + (A_2 + A_3) = (A_1 + A_2) + A_3$$
6. Distributivity: $$A_1 (A_2 + A_3) = A_1A_2 + A_1A_3$$
7. DeMorgan’s Law: $$(A_1A_2)^c = (A_1)^C + (A_2)^C$$
  
### Probability of Events

1. For any event $$A$$: $$Pr[A] \geq 0$$
2. For the full set, $$ Pr[S] = 1 $$
3. If $$A$$ and $$B$$ are *Mutually Exclusive* then $$Pr[A + B] = Pr[A] + Pr[B]$$
4. Axiom 3 can be extended: $$Pr[A_1 + A_2 + ... ] = Pr[A_1] + Pr[A_2] + ...$$

*Mutual Exclusivity* refers to the fact that $$A$$ and $$B$$ will never occur simultaneously, ie $$AB = 0$$.

#### Non-Mutually Exclusive

In cases where $$A$$ and $$B$$ can occur in the same set, Axiom 3 will not apply.

This is due to the fact that in overlapping events, the same area of probability will be counted twice, though it has no statistical importance.

\begin{equation}
    Pr[A_1 + A_2] = Pr[A_1] + Pr[A_2] - Pr[A_1A_2]
\end{equation}

Non mutually exclusive OR
{:.figcaption}

#### Complement of an Event

From expanding on these axioms, it can be seen that the complement of an event has a probability related to subtraction of itself from the sample space probability. If the chance of the event happening is known, the chance of an event not happening is found by subtracting this from absolute certainty.

\begin{equation}
    Pr[A^c] = 1 - Pr[A]
\end{equation}

The complement of a set versus the whole
{:.figcaption}

#### Statistical Independence

Two events $$A$$ and $$B$$ are said to be statiscally independent if:

\begin{equation}
    Pr[AB] = Pr[A]Pr[B]
\end{equation}

Statistical independence
{:.figcaption}

This refers to the fact that statistical data will happen independent of the preceding events. If you flip a coin, the probability of the next coin will be the same. If you take items from a bin, the probability of the next item being picked will go up, and is therefore dependent.

### Repeated Independant Trials

From the rule of statistical independence, we can process repeated trials.

$$Pr[H] = p$$

$$Pr[T] = Pr[H^c] = 1 - p = q$$

$$Pr[HHH] = ppp = p^3$$

$$Pr[HTH] = pqp = p^2q$$

Coin Flips
{:.figcaption}

Knowing that the probability of either event is 0.5, we can take the list of possible outcomes and calculate the probability.

$$
\begin{aligned}
Pr[\textrm{At least two heads}] &= Pr[HHH] + Pr[HHT] + Pr[HTH] + Pr[THH] \cr

&= ppp + ppq + pqp + qpp \cr

&= (0.5)^3 + (0.5)^2*(0.5) + (0.5)^2*(0.5) + (0.5)*(0.5)^2 \cr

&= 0.5
\end{aligned}
$$

$$Pr[\textrm{No heads}] = Pr[TTT] = q^3 = (0.5)^3 = 0.125$$

#### Sampling with Replacement

In this case, we consider an event where an event occurring does not subtract from a finite amount of events, ie a coin flip. In the case of heads or tails, there aren't one less heads or tails. So it is as if we replace the event in our sample space.

#### Sampling without Replacement

Finite amounts of events that can be subtracted from the whole. If this event happens, it won't happen again, as if we have taken our card from a deck of cards and not placed it back in the deck.

#### Order of Outcomes When Sampling Without Replacement

Cases when its important what order events occur in. Did we draw the Ace of Spades within the first 3 draws? The number of each event is not important.

##### K-Tuples

When a trial is repeated $$k$$ times, we form a sample space of outcomes made up of $$k$$ number of events.

#### The Rule of Product

How many possibilities are there for the formation of $$k$$-tuples, if there are $N_i$ choices for the $$i$$th element?

\begin{equation}
    N_1 * N_2 * ... N_k
\end{equation}

The Rule of Product
{:.figcaption}

By this rule, the number of possibilities when rolling a dice, then flipping a coin, will be $$6 * 2$$. In the case where same number of outcomes are possible with each experiment, the number of $$k$$-tuples is $$N^k$$, or $$2^k$$ in the case of repeated coin tosses.

#### Permutations of Unordered Outcomes

We no longer care in what order outcomes occur, we are only concerned with the number of outcomes of a certain sort across all trials.

This involves the number of ways we can choose $$k$$ objects in $$N$$ choices.

##### Permutations Without Replacement

* Experiments with two or more possible outcomes
* These trials can be repeated independently for $$N$$ times
* For each $$k$$th trial the outcome from the previous is removed
* Probabilities change for each consecutive trial

The resulting set is ordered, but as mentioned before, we only care about the number of possible permutations from these elements.

The number of possible sets is $$N!$$ or $$N * (N-1) * (N-2) * ... 2 * 1$$

**Example** - The 13 cards of a suit in a deck of cards can be laid out in $$13!$$ or $$6227020800$$ different ordered sequences.

If you want just $k$ draws from $N$ possible ways to draw the object, the number of sets will instead be from $$N$$ to $$(N-k+1)$$

Consider this problem - Lisa has 13 different ornaments and wants to put 4 ornaments on her mantle. In how many ways is this possible?

Using the product rule, Lisa has 13 choices for which ornament to put in the first position, 12 for the second position, 11 for the third position, and 10 for the fourth position. So the total number of choices she has is $$13 * 12 * 11 * 10$$. Using the factorial notation, the total number of choices is $$\frac{13!}{9!}$$.

From this example, we can see that if we have $$N$$ objects and want to arrange $k$ of them in a row, there are $$\frac{N!}{(N-k)!}$$ ways to do this.

The notation for permutations is $$P^{13}_3$$

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

* When $$X_1$$ and $$X_2$$ are independent, $$\text{Cov}[X_1,X_2]$$ = 0 and $$\text{Var}[Y]$$ = $$\text{Var}[X_1]$$ + $$\text{Var}[X_2]$$, while $$m_Y = E\{Y\} = E\{X_1\} + E\{X_2\} = m_{X_1} + m_{X_2}$$
* If $$X_1$$ and $$X_2$$ have the same distribution, $$m_{X_1} = m_{X_2} = m$$
  
#### Sums of Dependent RVs

In the case of $$Y = X_1 + X_2$$, if $$X_1$$ and $$X_2$$ are not independent, then:

$$
\begin{aligned}
f_Y(y) &= \int\limits^{\infty}_{-\infty}f_{X_1,X_2}(x_1,y - x_1)dx_1 \cr

m_Y &= E\{Y\} = E\{X_1\} + E\{X_2\} = m_{X_1} + m_{X_2} \cr\cr

\text{Var}[Y] &= E\{(Y - m_Y)^2\} = \text{Var}[X_1] - \text{Var}[X_2] + 2\text{Cov}[X_1,X_2]
\end{aligned}
$$

### Bivariate Gaussian

Two joint RVs with Gaussian characteristics together will have a joint Gaussian characteristic, called *bivariate* or *multi-variate* for more than 2.

## Limit Theorems

$$ M_n = \frac{1}{n} \sum\limits^n_{i = 1}K_i $$

$$ E\{Y_n\} = mY_n = nm_x $$

$$ \text{Var}[Y_n] = \sigma_{Y_n}^2 = n\sigma^2_x $$

$$ Z_n = \frac{Y_n - mY_n}{\sigma Y_n} = \frac{Y_n - nm_x}{\sqrt{n}\sigma_x} $$

In other terms, when the number of trials approach large numbers, the mean of the trials will be $$N m_X$$ and variance will be $$N \text{Var}[x]$$, where $$x$$ is a single trial. Then the new variable should have the characteristics of a Gaussian variable, with the mean and $$\sigma$$ at these values.

{:toc}
